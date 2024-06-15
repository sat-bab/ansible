#!/bin/bash

# Iterate over each file in the directory
for file in /home/secadmin/sar/outputs/*.txt; do
    # Check if the file is a regular file (not a directory or symlink)
    if [[ -f "$file" ]]; then
        # Run your shell command on each file
#         sar -u -s 09:00:00 -e 18:00:00 -f "$file" || grep -v Average | tail -n +4 |awk 'BEGIN { max = -999999 } { if ($4 > max) max = $4 } END { print "Maximum value:", max }'
          sar -u -s 09:00:00 -e 18:00:00 -f "$file" | grep -Ev 'Average|CPU|Linux' | awk -v file="$file" 'BEGIN { max = -999999 } { if ($4 > max) max = $4 } END { print "Maximum CPU Utilization:", max,file }' >> temp.txt
          sar -u -s 09:00:00 -e 18:00:00 -f "$file" | grep -Ev 'Average|CPU|Linux' | awk -v file="$file" 'BEGIN { max = -999999 } { if ($5 > max) max = $5 } END { print "Maximum CPU Utilization:", max,file }' >> temp.txt
          sar -r -s 09:00:00 -e 18:00:00 -f "$file" | grep -Ev 'Average|kbmemfree|Linux' | awk -v file="$file" 'BEGIN { max = -999999 } { if ($6 > max) max = $6 } END { print "Maximum Memory Utilization:", max,file }' >> temp.txt
          sar -r -s 09:00:00 -e 18:00:00 -f "$file" | grep -Ev 'Average|kbmemfree|Linux' | awk -v file="$file" 'BEGIN { max = -999999 } { if ($7 > max) max = $7 } END { print "Maximum Memoery Utilization:", max,file }' >> temp.txt
    fi
done
