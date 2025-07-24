# Orca Tech - Laravel Developer Assignment

## Overview

This assignment evaluates your Laravel development skills through a practical CSV upload and transaction management system. You will build functionality to upload, process, and display transaction data from CSV files.

**Expected Time:** 3-5 hours  
**Framework:** Laravel 12 with Vue.js/Inertia.js

## Getting Started

### Prerequisites
- PHP 8.2+
- Composer
- Node.js 18+ and npm
- SQLite (included with PHP)

### Installation

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd interview_assignment
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
   # Start all services
   composer dev

   # Or start individually
   php artisan serve
   npm run dev
   ```

6. **Access the application**
   - Visit: `http://localhost:8000`
   - Register a new account to begin

## Assignment Tasks

### Task 1: Database Design
- [x] Create a `Transaction` model and migration
- [x] Include fields: `customer_name`, `email`, `last4`, `currency`, `amount`, `type`, `status`, `transaction_date`

### Task 2: CSV Upload Functionality
- [ ] Create upload form with file validation
- [ ] Process CSV data and store in database
- [ ] Display success/error messages

### Task 3: Data Display
- [ ] Create transactions listing page with pagination
- [ ] Add search by customer name or email
- [ ] Add filters for transaction type and status

### Task 4: Code Quality & Testing (Nice to Have)
- [ ] Use Form Request validation
- [ ] Write basic feature tests
- [ ] Follow Laravel coding standards

## Sample Data

A sample CSV file is provided at `/public/sample-transactions.csv` with 20 transaction records.

### CSV Format
```csv
customer_name,email,last4,currency,amount,type,status,transaction_date
John Smith,john@example.com,1234,USD,150.50,payment,completed,2024-01-15 14:30:00
Jane Doe,jane@example.com,5678,EUR,89.99,payment,pending,2024-01-16 09:15:00
```

### Field Specifications
- **customer_name**: Full name of the customer
- **email**: Customer's email address  
- **last4**: Last 4 digits of payment method
- **currency**: Currency code (USD, EUR, GBP, etc.)
- **amount**: Transaction amount (decimal, 2 places)
- **type**: payment, refund, or chargeback
- **status**: completed, pending, or failed
- **transaction_date**: Date and time of transaction (YYYY-MM-DD HH:MM:SS)

## Technical Requirements

### Backend
- Laravel 12 framework
- Eloquent ORM for database operations
- Form Request validation
- Resource Controllers following RESTful conventions
- Proper error handling and logging
- Database migrations and model relationships

### Frontend  
- Vue.js 3 with Inertia.js OR API approach
- Responsive design with Tailwind CSS
- Form validation with user feedback  
- Professional, clean UI design

### Testing (Nice to Have)
- Basic feature tests for upload functionality
- Test file upload validation
- Test CSV processing logic
- Use Pest framework (preferred) or PHPUnit

## Evaluation Criteria

| Criteria | Weight | Description |
|----------|--------|-------------|
| **Functionality & Features** | 40% | All core requirements working correctly |
| **Code Quality & Structure** | 30% | Clean code, Laravel conventions, organization |
| **Database Design** | 20% | Proper schema, indexes, relationships |  
| **Testing & Error Handling** | 10% | Basic tests, proper error handling (bonus) |

## Development Commands

```bash
# Run tests
composer test
php artisan test

# Code formatting
php artisan pint
npm run lint
npm run format

# Build assets
npm run build
```

## File Structure

Key files for the assignment:
```
app/
├── Models/Transaction.php           # Transaction model (provided)
├── Http/Controllers/               # Your controllers here
├── Http/Requests/                  # Form validation requests (optional)
└── ...

database/
├── migrations/                     # Transaction migration (provided)
└── ...

resources/js/
├── pages/                         # Vue.js pages
└── components/                    # Reusable components

tests/ (optional)
├── Feature/                       # Feature tests
└── Unit/                         # Unit tests

public/
└── sample-transactions.csv        # Sample data file
```

## Submission Instructions

### What to Submit
1. **Complete source code** in a GitHub repository
2. **README.md** with setup instructions
3. **SUBMISSION.md** with:
   - Feature completion checklist
   - Challenges faced and solutions
   - Testing approach
   - Time spent on each task

### Submission Process
1. Fork this repository
2. Complete the assignment
3. Create a pull request with detailed description
4. Email the repository URL to the hiring team

### Email Template
```
Subject: Laravel Developer Assignment Submission - [Your Name]

Hi Orca Tech Team,

I have completed the Laravel Developer Assignment. Here are the details:

Repository URL: [your-repo-url]
Estimated Time Spent: [X hours]
Key Features Implemented: [brief list]

Looking forward to discussing my implementation.

Best regards,
[Your Name]
```

## Support

If you have questions about the assignment requirements:
1. Review this README thoroughly
2. Check the sample CSV file format
3. Review Laravel documentation for best practices
4. Contact the hiring team for clarification if needed

## Tips for Success

- Start with the database design and model
- Build the upload functionality first
- Add validation and error handling early
- Test your CSV processing with the sample file
- Keep the UI simple and professional
- Write tests as you build features
- Document your code and decisions

---

**Good luck with your assignment!** We look forward to reviewing your Laravel skills and implementation approach.