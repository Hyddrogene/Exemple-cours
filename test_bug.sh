#!/usr/bin/env bash
# Test minimal : 2 + 2 doit faire 4

RESULT=$(php calculatrice.php 2 2)

if [ "$RESULT" = "4" ]; then
  echo "OK : 2 + 2 = 4, pas de bug."
  exit 0
else
  echo "BUG : 2 + 2 ne vaut pas 4 (résultat = $RESULT)"
  exit 1
fi
