#!/bin/bash
# Script to sync card images from theme directory to uploads/card-images/ for all available cards
# Usage: Run this script from the project root

THEME_IMG_DIR="wp-content/themes/genesis-sample/images/cards"
UPLOADS_IMG_DIR="wp-content/uploads/card-images"

# Create uploads/card-images if it doesn't exist
mkdir -p "$UPLOADS_IMG_DIR"

# List of card slugs to check (add more as needed)
CARD_SLUGS=(
  "axis-magnus"
  "kotak-811"
  "axis-reserve"
  "hdfc-infinia"
  "hdfc-regalia"
  "hdfc-millennia"
  "icici-amazon-pay"
  "icici-coral"
  "sbi-elite"
  "sbi-simply-save"
  "amex-gold"
  "amex-platinum-travel"
  # ...add all other card slugs here
)

for slug in "${CARD_SLUGS[@]}"; do
  # Try to find a matching image in the theme directory (case-insensitive)
  found_img=""
  for ext in jpg png webp svg; do
    for img in "$THEME_IMG_DIR"/*.$ext; do
      img_lc="$(basename "$img" | tr '[:upper:]' '[:lower:]')"
      if [[ "$img_lc" == "$slug.$ext" ]]; then
        found_img="$img"
        break 2
      fi
    done
  done
  if [[ -n "$found_img" ]]; then
    cp "$found_img" "$UPLOADS_IMG_DIR/$slug.jpg"
    echo "Copied $found_img to $UPLOADS_IMG_DIR/$slug.jpg"
  else
    echo "Image for $slug not found in theme directory. Please add manually."
  fi
done
