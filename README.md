# QuoteCraft

A price quotation tool built with Laravel and Vue.js. QuoteCraft provides a multi-step form interface for collecting business requirements and generating pricing quotes, with automated email delivery.

## Features

- **Multi-Step Form** — Vue.js-powered wizard with Basic Info and Business Info steps
- **Price Calculation** — Server-side pricing logic based on submitted requirements
- **Email Delivery** — Automated quote delivery via Laravel Mailable with formatted Blade templates
- **Form Validation** — Request validation on both client and server side
- **Responsive UI** — Clean, user-friendly form interface

## Tech Stack

- **Backend:** Laravel 8 (PHP 7.3+ / 8.0+)
- **Frontend:** Vue.js with Laravel Mix
- **API:** Laravel Sanctum
- **Email:** Laravel Mail with Blade templates
- **Database:** MySQL

## Getting Started

```bash
# Clone the repository
git clone https://github.com/mhmalvi/quotecraft.git
cd quotecraft

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Configure mail settings in .env for quote delivery

# Run migrations
php artisan migrate

# Build frontend assets
npm run dev

# Start the development server
php artisan serve
```

## Project Structure

```
app/
├── Http/Controllers/
│   └── PricingFormController.php   # Quote processing logic
├── Http/Requests/
│   └── GetPricingRequest.php       # Form validation rules
└── Mail/
    └── GetPricingMail.php          # Quote email mailable
resources/
├── js/components/
│   ├── FormComponent.vue           # Main form wrapper
│   └── childs/
│       ├── BasicInfo.vue           # Step 1: Basic information
│       └── BusinessInfo.vue        # Step 2: Business details
└── views/mails/
    └── get-pricing.blade.php       # Email template
```

## License

MIT
