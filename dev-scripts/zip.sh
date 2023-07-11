#!/bin/bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
CDIR=$( pwd )
cd $DIR/../themes
zip -r ../zips/concordamos.zip concordamos -x "concordamos/node_modules/*"
