#!/bin/bash

echo 'Usage: metallify <name> <text colour> <background colour> <font dir> <output dir> <filename>';

TEXT=$1
COLOR=$2
BGCOLOR=$3
FONT_DIR=$4
OUTPUT_DIR=$5
FILENAME=$6

mkdir -p $5/$6

LENGTH=`echo "EbotuneS" | wc -c`
(( LENGTH=LENGTH - 1 ))
END=`echo "EbotuneS" | cut -c $LENGTH`

(( LENGTH=LENGTH - 1 ))
START=`echo "EbotuneS" | cut -c 1-$LENGTH`

pwd

convert -background $3 -fill $2 -font $4/fonts/PastorofMuppets.ttf -pointsize 180 label:$START $5/$6/start.jpg
convert -background $3 -fill $2 -font $4/fonts/PastorofMuppetsFlipped.ttf -pointsize 180 label:$END $5/$6/end.jpg

