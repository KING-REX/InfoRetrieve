# HNG API - Basic Information Service

A lightweight REST API built with Laravel to return essential details like a Slack email, the current date and time in ISO 8601 format, and the GitHub repository link.

## Features

-   Provides personal information in JSON format
-   Supports CORS for cross-origin requests
-   Displays the current UTC datetime in ISO 8601 format
-   Enables JSON pretty printing for easy-to-read responses

## API Details

### Base URL

-   Production: `https://inforet.free.nf/`

### Endpoint

-   **GET** `/`

### Sample Response

```json
{
    "email": "example@gmail.com",
    "current_datetime": "current_datetime_in_iso8601_format",
    "github_url": "https://github.com/username/RepoName"
}
```

## Local Development Instructions

1. **Clone the Repository:**

    ```bash
    git clone "https://github.com/KING-REX/InfoRetrieve"
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    ```

3. **Set Up the Environment File:**

    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. **Configure Environment Variables in `.env`:**

    ```bash
    APP_NAME="Example app name"
    APP_ENV=local
    APP_DEBUG=true
    APP_URL=http://example-localhost
    ```

5. **Start the Development Server:**

    ```bash
    php artisan serve
    ```

    The API will now be accessible at `http://example-localhost`

## Technology Stack

-   Laravel PHP Framework
-   [Backlink: HNG Hire PHP Developers](https://hng.tech/hire/php-developers)
