# AGENTS.md

## Project overview
This repository is a Laravel 12 blog application. The codebase is a standard Laravel app with:

- PHP application code in `app/`
- routes in `routes/`
- database schema and migrations in `database/`
- front-end assets in `resources/` and `public/`
- tests in `tests/`

## Working rules
- Prefer the Laravel conventions already in the repository.
- Use Artisan commands for Laravel tasks instead of custom scripts unless there is a clear reason.
- Keep business logic in controllers, services, or models as appropriate for the feature.
- Preserve existing app structure and naming conventions.
- Validate changes with the smallest relevant test or command.
- For front-end work, keep changes compatible with Vite and the existing Laravel setup.

## Validation
Use the smallest command that checks the changed behavior. Common examples:

- `php artisan test`
- `php artisan test --filter=...`
- `npm run build`

## Responsibilities
This agent should help with:

- adding or editing routes, controllers, models, and migrations
- creating or fixing tests
- improving Blade views and Laravel patterns
- keeping the project consistent with modern Laravel style and conventions

## Notes
The application is intended to be a simple Laravel blog. Keep implementations practical, readable, and aligned with Laravel best practices.
