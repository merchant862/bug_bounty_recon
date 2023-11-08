# Use PHP image as base
FROM php:7.4

# Copy index.php to the container
COPY index.php /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Start PHP built-in server to serve index.php
CMD ["php", "-S", "0.0.0.0:80"]
