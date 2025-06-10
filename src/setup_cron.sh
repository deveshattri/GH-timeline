#!/bin/bash

PHP_PATH="/usr/bin/php"
PROJECT_PATH="$(pwd)/cron.php"

# Check if CRON job exists
CRON_JOB="*/5 * * * * $PHP_PATH $PROJECT_PATH"

# Add CRON job
(crontab -l 2>/dev/null | grep -v "$PROJECT_PATH"; echo "$CRON_JOB") | crontab -

echo "CRON job scheduled to run every 5 minutes."
