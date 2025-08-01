# Orca Tech - Laravel Developer Assignment

## Overview

Build a CSV upload and transaction management system using Laravel 12 with Vue.js/Inertia.js.

**Expected Time:** 3-5 hours

## Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js 18+ and npm
- SQLite (included with PHP)

### Installation

1. **Clone the repository**
   ```bash
   git clone <repo-url>
   cd developer_assignment
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

5. **Start development servers**
   ```bash
   composer dev
   ```

6. **Access the application**
   - Visit: `http://localhost:8000`
   - Register a new account to begin

## Assignment Tasks

Build a complete CSV upload and transaction management system from scratch.

### Task 1: Database Design
- [ ] Create `Transaction` model and migration
- [ ] Fields: `customer_name`, `email`, `last4`, `currency`, `amount`, `type`, `status`, `transaction_date`
- [ ] Add appropriate database indexes

### Task 2: CSV Upload Functionality  
- [ ] Create file upload form with validation
- [ ] Process CSV data and store in database
- [ ] Handle errors and provide user feedback

### Task 3: Data Display
- [ ] Create transactions listing page with pagination
- [ ] Add search functionality (customer name, email)
- [ ] Add filters for transaction type and status

### Task 4: Code Quality (Bonus)
- [ ] Use Form Request validation
- [ ] Write basic feature tests
- [ ] Follow Laravel conventions

## Sample Data

Use the provided CSV file at `/public/sample-transactions.csv` for testing.

### CSV Format
```csv
customer_name,email,last4,currency,amount,type,status,transaction_date
John Smith,john@example.com,1234,USD,150.50,payment,completed,2024-01-15 14:30:00
Jane Doe,jane@example.com,5678,EUR,89.99,payment,pending,2024-01-16 09:15:00
```

### Field Requirements
- **customer_name**: Full name (required, max 255 chars)
- **email**: Valid email address (required)
- **last4**: Last 4 digits of payment method (required, exactly 4 digits)
- **currency**: Currency code (required, 3 chars: USD, EUR, GBP)
- **amount**: Transaction amount (required, decimal with 2 places)
- **type**: payment, refund, or chargeback (required)
- **status**: completed, pending, or failed (required)
- **transaction_date**: YYYY-MM-DD HH:MM:SS format (required)

## Technical Requirements

### Backend
- Laravel 12 with Eloquent ORM
- Form Request validation
- RESTful controllers
- Proper error handling
- Database migrations with indexes

### Frontend  
- Vue.js 3 with Inertia.js
- Tailwind CSS for styling
- Responsive design
- Form validation with feedback

## Development Commands

```bash
# Run tests
composer test

# Code formatting
php artisan pint
npm run lint

# Build assets
npm run build
```

## Evaluation Criteria

| Criteria | Weight |
|----------|--------|
| **Functionality** | 40% |
| **Code Quality** | 30% |
| **Database Design** | 20% |
| **Testing** | 10% |

## Submission

Once you complete the assignment, push your code to GitHub and share the repository link with us.

---

**Good luck!** We look forward to reviewing your Laravel development skills.