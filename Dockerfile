# Use the official nginx image
FROM nginx:alpine

# Remove the default nginx static assets
RUN rm -rf /usr/share/nginx/html/*

# Copy your site files to the nginx html directory
COPY . /usr/share/nginx/html

# Expose port 80
EXPOSE 80