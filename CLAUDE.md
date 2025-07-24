# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Development Commands

### PHP/Laravel Commands
- `composer dev` - Start complete development stack (Laravel server, queue, logs, Vite)
- `composer dev:ssr` - Start development with SSR support
- `composer test` - Run PHP tests (clears config first)
- `php artisan serve` - Start Laravel development server only
- `php artisan migrate` - Run database migrations
- `php artisan db:seed` - Seed database with sample skills and users
- `php artisan test` - Run tests using Pest framework
- `php artisan pail` - View application logs in real-time

### Frontend Commands
- `npm run dev` - Start Vite development server
- `npm run build` - Build assets for production
- `npm run build:ssr` - Build with SSR support
- `npm run lint` - Run ESLint with auto-fix
- `npm run format` - Format code with Prettier
- `npm run format:check` - Check code formatting

### Testing
- Run all tests: `composer test` or `php artisan test`
- Tests use Pest framework with SQLite in-memory database
- Test files located in `tests/Feature/` and `tests/Unit/`

### Assignment Setup
- CSV Upload Assignment: Transaction management system
- Database migration for Transaction model with proper indexes
- Sample CSV file with 20 transaction records at `/public/sample-transactions.csv`
- Sample user: test@example.com / password: password

## Architecture Overview

### Frontend Stack
- **Vue 3** with Composition API and TypeScript
- **Inertia.js** for SPA-like experience without separate API
- **Tailwind CSS v4** for styling with Vite plugin
- **Reka UI** component library for accessible components
- **Vite** for asset building with Laravel plugin

### Backend Stack
- **Laravel 12** with PHP 8.2+
- **SQLite** database (database.sqlite)
- **Pest** testing framework
- **Laravel Pint** for PHP code styling

### Key Architectural Patterns

#### Inertia.js Integration
- Pages are Vue components in `resources/js/pages/`
- Server renders initial page load, subsequent navigation is SPA-style
- Shared data configured in `HandleInertiaRequests.php:38`
- Routes return `Inertia::render()` instead of views
- Ziggy integration provides Laravel routes in frontend

#### Component Organization
- Page components: `resources/js/pages/`
- Reusable components: `resources/js/components/`
- UI library components: `resources/js/components/ui/` (Reka UI based)
- Layout components: `resources/js/layouts/`

#### State Management
- No external state manager - uses Vue's reactive system
- Shared data from Inertia includes: auth user, app name, ziggy routes, sidebar state
- Theme/appearance state managed via `useAppearance` composable
- Form handling uses Inertia's form helper

#### Routing Structure
- Main routes: `routes/web.php`
- Authentication routes: `routes/auth.php` 
- Settings routes: `routes/settings.php`
- Frontend routing handled by Inertia/Ziggy

#### Authentication & Authorization
- Complete authentication system with email verification
- Profile and password management in settings
- Middleware: `auth`, `verified`, `guest`
- Controllers organized in `App\Http\Controllers\Auth\` and `App\Http\Controllers\Settings\`

#### Database
- Uses SQLite for development
- Migrations in `database/migrations/`
- User factory in `database/factories/`

### Frontend Architecture Details

#### Component Structure
- Pages follow nested structure matching routes
- Layouts provide consistent structure (`AppLayout`, `AuthLayout`)
- UI components are pre-built with consistent styling
- TypeScript throughout with proper type definitions

#### Asset Pipeline
- Entry point: `resources/js/app.ts`
- SSR entry: `resources/js/ssr.ts`
- CSS entry: `resources/css/app.css`
- Vite handles bundling with Laravel integration

#### Development Features
- Hot reload via Vite
- TypeScript checking with `vue-tsc`
- ESLint with Vue and TypeScript configs
- Prettier formatting with Tailwind plugin
- Theme switching (light/dark mode)

### Assignment-Specific Models

#### Transaction Model (`app/Models/Transaction.php`)
- Fields: customer_name, email, last4, currency, amount, type (payment/refund/chargeback), status (completed/pending/failed), transaction_date
- Scopes: byType(), byStatus(), search() (by customer name or email)
- Accessors: formatted_amount, status_badge_color, type_badge_color
- Database indexes on email, type+status, customer_name, transaction_date for performance
- Proper validation and casting (amount as decimal:2, transaction_date as datetime)

## Code Quality Tools

### Linting & Formatting
- **ESLint**: Vue + TypeScript rules, ignores UI components and generated files
- **Prettier**: Code formatting with import organization and Tailwind class sorting
- **Laravel Pint**: PHP code styling (follows Laravel conventions)

### TypeScript Configuration
- Strict TypeScript setup with Vue SFC support
- Global types in `resources/js/types/`
- Ziggy route types auto-generated

## Development Workflow

### File Locations
- PHP controllers: `app/Http/Controllers/`
- Vue pages: `resources/js/pages/`  
- Vue components: `resources/js/components/`
- Routes: `routes/` directory
- Database files: `database/` directory
- Tests: `tests/Feature/` and `tests/Unit/`

### Common Patterns
- New pages: Add route in appropriate routes file, create Vue component in `resources/js/pages/`
- API endpoints: Create controller methods that return `Inertia::render()` or JSON responses
- Forms: Use Inertia form helpers with validation
- Authentication: Routes use `auth` middleware, check `$request->user()` in controllers
- Styling: Use Tailwind classes, extend with custom CSS if needed