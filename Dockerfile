# Specify the base image
FROM node:14.17-alpine

# Set the working directory
WORKDIR /app

# Install Node.js dependencies and build the assets
RUN npm install && npm run prod

# Configure the server to serve the Laravel application
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Expose the port
EXPOSE 8000

# Start the Laravel application
CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]
