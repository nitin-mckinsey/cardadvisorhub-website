jQuery(document).ready(function($) {
    // Handle review form submission
    $(document).on('submit', '.review-form', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');
        var originalText = submitBtn.text();
        
        // Disable submit button
        submitBtn.prop('disabled', true).text('Submitting...');
        
        var formData = {
            action: 'submit_card_review',
            nonce: cardadvisor_ajax.nonce,
            card_id: form.find('input[name="card_id"]').val(),
            rating: form.find('select[name="rating"]').val(),
            review: form.find('textarea[name="review"]').val(),
            reviewer_name: form.find('input[name="reviewer_name"]').val(),
            reviewer_email: form.find('input[name="reviewer_email"]').val()
        };
        
        $.post(cardadvisor_ajax.ajax_url, formData, function(response) {
            if (response.success) {
                // Show success message
                form.before('<div class="success-message">Review submitted successfully! It will be published after moderation.</div>');
                form[0].reset();
            } else {
                // Show error message
                form.before('<div class="error-message">' + response.data + '</div>');
            }
        })
        .fail(function() {
            form.before('<div class="error-message">Error submitting review. Please try again.</div>');
        })
        .always(function() {
            // Re-enable submit button
            submitBtn.prop('disabled', false).text(originalText);
            
            // Remove messages after 5 seconds
            setTimeout(function() {
                $('.success-message, .error-message').fadeOut();
            }, 5000);
        });
    });
    
    // Handle favorite toggle
    $(document).on('click', '.toggle-favorite', function(e) {
        e.preventDefault();
        
        var btn = $(this);
        var cardId = btn.data('card-id');
        var originalText = btn.text();
        
        btn.prop('disabled', true).text('Processing...');
        
        var data = {
            action: 'toggle_favorite',
            nonce: cardadvisor_ajax.nonce,
            card_id: cardId
        };
        
        $.post(cardadvisor_ajax.ajax_url, data, function(response) {
            if (response.success) {
                var action = response.data.action;
                if (action === 'added') {
                    btn.text('Remove from Favorites').addClass('favorited');
                } else {
                    btn.text('Add to Favorites').removeClass('favorited');
                }
                
                // Show message
                $('<div class="favorite-message">' + response.data.message + '</div>')
                    .insertAfter(btn)
                    .delay(3000)
                    .fadeOut();
            } else {
                // Show error message
                alert(response.data);
                btn.text(originalText);
            }
        })
        .fail(function() {
            alert('Error processing request. Please try again.');
            btn.text(originalText);
        })
        .always(function() {
            btn.prop('disabled', false);
        });
    });
    
    // Card comparison functionality
    var selectedCards = [];
    var maxComparison = 4;
    
    $(document).on('click', '.add-to-compare', function(e) {
        e.preventDefault();
        
        var cardId = $(this).data('card-id');
        var cardName = $(this).data('card-name');
        
        if (selectedCards.indexOf(cardId) !== -1) {
            // Already selected
            return;
        }
        
        if (selectedCards.length >= maxComparison) {
            alert('You can compare maximum ' + maxComparison + ' cards at a time.');
            return;
        }
        
        selectedCards.push(cardId);
        updateComparisonBar();
        
        $(this).text('Added to Compare').addClass('added');
    });
    
    function updateComparisonBar() {
        var compareBar = $('.comparison-bar');
        
        if (selectedCards.length === 0) {
            compareBar.hide();
            return;
        }
        
        if (compareBar.length === 0) {
            // Create comparison bar
            compareBar = $('<div class="comparison-bar"><div class="comparison-content"><span class="compare-count"></span><button class="btn btn-compare">Compare Now</button><button class="btn btn-clear">Clear All</button></div></div>');
            $('body').append(compareBar);
        }
        
        compareBar.find('.compare-count').text(selectedCards.length + ' cards selected');
        compareBar.show();
    }
    
    $(document).on('click', '.btn-compare', function() {
        if (selectedCards.length < 2) {
            alert('Please select at least 2 cards to compare.');
            return;
        }
        
        // Redirect to comparison page
        window.location.href = '/compare-cards/?cards=' + selectedCards.join(',');
    });
    
    $(document).on('click', '.btn-clear', function() {
        selectedCards = [];
        $('.add-to-compare').text('Add to Compare').removeClass('added');
        $('.comparison-bar').hide();
    });
    
    // Rewards calculator enhancements
    if ($('.rewards-calculator').length > 0) {
        // Auto-save inputs to localStorage
        $('.category-input input').on('input', function() {
            var inputData = {};
            $('.category-input input').each(function() {
                inputData[$(this).attr('id')] = $(this).val();
            });
            localStorage.setItem('calculator_inputs', JSON.stringify(inputData));
        });
        
        // Load saved inputs
        var savedInputs = localStorage.getItem('calculator_inputs');
        if (savedInputs) {
            savedInputs = JSON.parse(savedInputs);
            Object.keys(savedInputs).forEach(function(key) {
                $('#' + key).val(savedInputs[key]);
            });
            // Trigger total update
            $('.category-input input').first().trigger('input');
        }
    }
    
    // Filter enhancements for comparison page
    if ($('.compare-page').length > 0) {
        // URL parameter handling for filters
        var urlParams = new URLSearchParams(window.location.search);
        urlParams.forEach(function(value, key) {
            var select = $('#' + key);
            if (select.length > 0) {
                select.val(value);
            }
        });
        
        // Auto-apply filters if URL params exist
        if (Array.from(urlParams).length > 0) {
            $('#apply-filters').trigger('click');
        }
        
        // Update URL when filters change
        $('.filter-select').on('change', function() {
            var params = new URLSearchParams();
            $('.filter-select').each(function() {
                if ($(this).val()) {
                    params.set($(this).attr('id'), $(this).val());
                }
            });
            
            var newUrl = window.location.pathname;
            if (params.toString()) {
                newUrl += '?' + params.toString();
            }
            
            history.replaceState({}, '', newUrl);
        });
    }
    
    // Card detail page enhancements
    if ($('.card-detail-page').length > 0) {
        // Track card view
        var cardId = $('body').data('card-id');
        if (cardId) {
            $.post(cardadvisor_ajax.ajax_url, {
                action: 'track_card_view',
                nonce: cardadvisor_ajax.nonce,
                card_id: cardId
            });
        }
        
        // Smooth scroll to sections
        $('.quick-nav a').on('click', function(e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 500);
            }
        });
        
        // Sticky apply button
        var applyBtn = $('.cta-buttons');
        var originalOffset = applyBtn.offset().top;
        
        $(window).scroll(function() {
            if ($(window).scrollTop() > originalOffset + 200) {
                if (!applyBtn.hasClass('sticky')) {
                    $('<div class="sticky-apply-bar"><div class="container"><button class="btn btn-primary">Apply Now</button></div></div>')
                        .appendTo('body')
                        .hide()
                        .fadeIn();
                    applyBtn.addClass('sticky');
                }
            } else {
                $('.sticky-apply-bar').fadeOut(function() {
                    $(this).remove();
                });
                applyBtn.removeClass('sticky');
            }
        });
    }
    
    // Search functionality
    $('.card-search').on('input', function() {
        var searchTerm = $(this).val().toLowerCase();
        var cards = $('.card-row, .card-item');
        
        cards.each(function() {
            var cardName = $(this).find('.card-name, h3, h4').text().toLowerCase();
            var bankName = $(this).find('.bank, .card-network').text().toLowerCase();
            
            if (cardName.indexOf(searchTerm) !== -1 || bankName.indexOf(searchTerm) !== -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
        
        // Show "no results" message if needed
        var visibleCards = cards.filter(':visible');
        var noResultsMsg = $('.no-results-message');
        
        if (visibleCards.length === 0 && searchTerm.length > 0) {
            if (noResultsMsg.length === 0) {
                $('<div class="no-results-message">No cards found matching your search.</div>')
                    .insertAfter('.card-search');
            }
        } else {
            noResultsMsg.remove();
        }
    });
    
    // Mobile menu toggle for filters
    $('.filter-toggle').on('click', function() {
        $('.filters').toggleClass('open');
    });
    
    // Close filters when clicking outside on mobile
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.filters, .filter-toggle').length) {
            $('.filters').removeClass('open');
        }
    });
});

// Utility functions
function formatCurrency(amount) {
    return '₹' + amount.toLocaleString('en-IN');
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
