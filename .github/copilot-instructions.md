# Copilot Instructions for this Laravel blog

You are working in a Laravel application for a blog. Follow the repository conventions and keep work consistent with the existing structure.

## Stack
- PHP 8.2+
- Laravel 12
- Vite for front-end assets
- PHPUnit for automated tests

## Code conventions
- Use Laravel naming conventions and idiomatic patterns.
- Prefer existing patterns already used in the app over introducing new abstractions.
- Keep routes, controllers, models, and migrations organized by responsibility.
- Use Eloquent models and migrations rather than custom database wrappers.
- Keep Blade templates simple and readable.

## Validation
- Prefer targeted checks over broad suites.
- Run the smallest relevant validation command after changes.
- For PHP changes, use `php artisan test` or a filtered test command when possible.
- For front-end build issues, use `npm run build`.

## Working style
- Make the smallest change that solves the problem.
- Do not add unnecessary dependencies or architecture complexity.
- Preserve compatibility with the current Laravel version and existing project setup.
- When adding features, include or update tests when the behavior is covered by the suite.
