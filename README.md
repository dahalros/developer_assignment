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

You need to build a complete CSV upload and transaction management system from scratch. The project provides only the basic Laravel authentication and structure.

### Task 1: Database Design & Model Creation
- [ ] Create a `Transaction` model and migration with proper fields and validation
- [ ] Include fields: `customer_name`, `email`, `last4`, `currency`, `amount`, `type`, `status`, `transaction_date`
- [ ] Add appropriate database indexes for performance
- [ ] Implement model scopes and accessors as needed

### Task 2: CSV Upload Functionality  
- [ ] Create a file upload form with proper validation (file type, size, structure)
- [ ] Build CSV processing logic to parse and validate data
- [ ] Implement database transaction handling for bulk inserts
- [ ] Add comprehensive error handling and user feedback
- [ ] Handle duplicate detection and data conflicts

### Task 3: Data Display & Management
- [ ] Create a transactions listing page with pagination
- [ ] Implement search functionality (customer name, email)
- [ ] Add filtering options (transaction type, status, date range)
- [ ] Display transaction data in a clean, professional table format
- [ ] Add sorting capabilities for key columns

### Task 4: Code Quality & Testing (Nice to Have)
- [ ] Use Form Request validation classes
- [ ] Write feature tests for upload and display functionality
- [ ] Follow Laravel coding standards and best practices
- [ ] Implement proper error logging and handling
- [ ] Add input sanitization and security measures

### Task 5: UI/UX Enhancement (Bonus)
- [ ] Responsive design that works on mobile devices
- [ ] Loading states and progress indicators for CSV processing
- [ ] Export functionality (download filtered results as CSV)
- [ ] Dashboard with transaction statistics and charts

## Sample Data Format

Create a sample CSV file with the following format for testing:

```csv
customer_name,email,last4,currency,amount,type,status,transaction_date
John Smith,john@example.com,1234,USD,150.50,payment,completed,2024-01-15 14:30:00
Jane Doe,jane@example.com,5678,EUR,89.99,payment,pending,2024-01-16 09:15:00
Mike Johnson,mike@example.com,9012,USD,75.25,refund,completed,2024-01-17 11:45:00
Sarah Wilson,sarah@example.com,3456,GBP,200.00,payment,failed,2024-01-18 16:20:00
```

### Field Specifications
- **customer_name**: Full name of the customer (required, max 255 chars)
- **email**: Customer's email address (required, valid email format)
- **last4**: Last 4 digits of payment method (required, exactly 4 digits)
- **currency**: Currency code (required, 3 chars: USD, EUR, GBP, etc.)
- **amount**: Transaction amount (required, decimal with 2 places, positive)
- **type**: Transaction type (required, enum: payment, refund, chargeback)
- **status**: Transaction status (required, enum: completed, pending, failed)
- **transaction_date**: Date and time of transaction (required, format: YYYY-MM-DD HH:MM:SS)

## Technical Requirements

### Backend Requirements
- Laravel 12 framework with modern PHP practices
- Eloquent ORM for all database operations
- Form Request validation with custom validation rules
- Resource Controllers following RESTful conventions
- Proper error handling, logging, and user feedback
- Database migrations with appropriate indexes and constraints
- Queue jobs for large CSV processing (bonus)

### Frontend Requirements  
- Vue.js 3 with Composition API and Inertia.js integration
- Responsive design using Tailwind CSS v4
- Form validation with real-time feedback
- Professional, clean UI design following modern standards
- Proper loading states and error handling
- Accessible components (ARIA labels, keyboard navigation)

### Performance & Security
- Database indexing for optimal query performance  
- Input validation and sanitization
- CSRF protection and secure file uploads
- Rate limiting for upload endpoints
- Memory-efficient CSV processing for large files
- Proper error handling without information disclosure

### Testing Requirements (Nice to Have)
- Feature tests for CSV upload workflow
- Unit tests for CSV parsing logic
- Form validation testing
- Database integration tests
- Use Pest framework (preferred) or PHPUnit

## Evaluation Criteria

| Criteria | Weight | Description |
|----------|--------|-------------|
| **Functionality & Features** | 35% | All core requirements working correctly |
| **Code Quality & Architecture** | 25% | Clean code, Laravel conventions, structure |
| **Database Design & Performance** | 20% | Proper schema, indexes, efficient queries |
| **UI/UX & Frontend** | 15% | Professional design, responsive, accessible |
| **Testing & Error Handling** | 5% | Basic tests, comprehensive error handling |

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

# Database operations
php artisan migrate:fresh
php artisan db:seed
```

## Project Structure

Expected file organization for your implementation:

```
app/
├── Models/
│   └── Transaction.php           # Your Transaction model
├── Http/Controllers/
│   └── TransactionController.php # Your main controller
├── Http/Requests/
│   └── CsvUploadRequest.php      # Form validation (optional)
├── Services/                     # Business logic (optional)
│   └── CsvProcessingService.php
└── Jobs/                         # Queue jobs (bonus)
    └── ProcessCsvUpload.php

database/
├── migrations/
│   └── xxxx_create_transactions_table.php
└── seeders/                      # Optional test data

resources/js/
├── pages/
│   ├── Transactions/
│   │   ├── Index.vue            # Transactions listing
│   │   └── Upload.vue           # CSV upload form
│   └── Dashboard.vue            # Optional dashboard
└── components/
    ├── TransactionTable.vue     # Reusable table component
    └── FileUpload.vue           # Upload component

tests/
├── Feature/
│   ├── TransactionUploadTest.php
│   └── TransactionDisplayTest.php
└── Unit/
    └── CsvProcessingTest.php
```

---

## Submission Instructions

### Submission Checklist

Please complete this checklist before submitting your assignment:

#### Core Functionality ✅
- [ ] **Database & Model**
  - [ ] Transaction model created with proper fields and validation
  - [ ] Migration includes all required fields and indexes
  - [ ] Model includes scopes, accessors, and relationships as needed

- [ ] **CSV Upload System** 
  - [ ] File upload form with validation (file type, size, required fields)
  - [ ] CSV parsing and data validation logic
  - [ ] Bulk database insertion with transaction handling
  - [ ] Error handling for malformed CSV files
  - [ ] Success/error feedback to users

- [ ] **Data Display**
  - [ ] Transactions listing page with pagination
  - [ ] Search functionality (customer name and email)
  - [ ] Filtering options (type, status, date range)
  - [ ] Responsive table design
  - [ ] Proper data formatting and display

#### Code Quality ✅
- [ ] **Laravel Best Practices**
  - [ ] RESTful controller structure
  - [ ] Form Request validation (if implemented)
  - [ ] Proper error handling and logging
  - [ ] Following Laravel naming conventions
  - [ ] Clean, readable, and documented code

- [ ] **Frontend Implementation**
  - [ ] Vue.js components with proper structure
  - [ ] Inertia.js integration working correctly
  - [ ] Tailwind CSS for responsive styling
  - [ ] Form validation with user feedback
  - [ ] Loading states and error handling

#### Testing & Documentation ✅
- [ ] **Testing** (Nice to Have)
  - [ ] Feature tests for main functionality
  - [ ] Tests pass without errors
  - [ ] Test coverage for critical paths

- [ ] **Documentation**
  - [ ] Code is self-documenting with clear variable/method names
  - [ ] Complex logic includes comments
  - [ ] README updates if additional setup is required

#### Technical Implementation ✅
- [ ] **Performance Considerations**
  - [ ] Database queries are optimized
  - [ ] Appropriate indexes are in place
  - [ ] Memory-efficient CSV processing
  - [ ] Proper pagination implementation

- [ ] **Security & Validation**
  - [ ] Input validation and sanitization
  - [ ] File upload security measures
  - [ ] CSRF protection maintained
  - [ ] No sensitive data exposed in error messages

### What to Submit

1. **Complete source code** pushed to a GitHub repository
2. **Working application** that can be set up and tested locally
3. **This completed checklist** (copy and paste with your status)

### How to Submit

1. **Create a GitHub repository** for your assignment
2. **Complete all the tasks** according to the requirements
3. **Test your implementation** thoroughly with sample data
4. **Update this checklist** with your completion status
5. **Push your final code** to the repository
6. **Email the repository URL** to the hiring team

**Email:** hiring-team@orcatech.com  
**Subject:** Laravel Developer Assignment - [Your Name]

### Sample Email Template

```
Subject: Laravel Developer Assignment - John Doe

Hi Orca Tech Hiring Team,

I have completed the Laravel Developer Assignment. Here are the details:

Repository URL: https://github.com/yourusername/orca-laravel-assignment
Time Spent: ~4 hours

Key Features Implemented:
✅ Complete CSV upload and processing system
✅ Transaction management with search and filtering
✅ Responsive UI with Vue.js and Tailwind CSS
✅ Form validation and error handling
✅ Database optimization with proper indexes
✅ Basic feature testing

Additional Notes:
- Added export functionality as a bonus feature
- Implemented queue-based processing for large files
- Included comprehensive error handling

The application is ready for testing with the provided setup instructions.

Best regards,
John Doe
john@example.com
```

## Support & Questions

If you have questions about the assignment requirements, please contact:
**Email:** hiring-team@orcatech.com

## Tips for Success

### Development Strategy
1. **Start with the database** - Design your Transaction model and migration first
2. **Build incrementally** - Start with basic upload, then add features
3. **Test frequently** - Validate each feature as you build it
4. **Focus on core functionality** - Get the main features working before adding extras

### Code Quality Focus
- **Follow Laravel conventions** - Use standard naming and structure patterns
- **Keep it clean** - Write readable, well-organized code
- **Handle errors gracefully** - Provide helpful feedback to users
- **Think about performance** - Consider database efficiency and user experience

### Common Pitfalls to Avoid
- Don't skip validation - Always validate both file uploads and data content
- Don't ignore edge cases - Handle empty files, malformed data, large uploads
- Don't forget responsive design - Ensure mobile compatibility
- Don't neglect error handling - Users should always know what went wrong

---

**Good luck with your assignment!** We look forward to reviewing your Laravel development skills and seeing your implementation approach.