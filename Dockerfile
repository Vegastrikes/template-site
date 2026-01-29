# 1) Build CSS with Node
FROM node:20-alpine AS assets
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npx @tailwindcss/cli -i ./css/main.css -o ./css/output.css --minify

# 2) Run PHP built-in server
FROM php:8.3-cli-alpine
WORKDIR /app
COPY --from=assets /app /app

EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000", "-t", "."]
