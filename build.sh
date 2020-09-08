#!/bin/bash

# Build script for serving static content instead of php files
DEST="./public"
html=".html"

# Create destination folder
mkdir -p "$DEST/"

# Execute all php files and save them as html
for f in *.php; 
do
    php $f | sed 's:\(<a.*href=".*\)\.php\(".*</a>\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
    echo "Processing $f into ${f/.php/$html}..";
done

#Copy all asset files
cp -r ./assets ./public/assets
echo "Copying assets..";

#Copy all image files
cp -r ./img ./public/img
echo "Copying images..";

echo "Process complete." ;