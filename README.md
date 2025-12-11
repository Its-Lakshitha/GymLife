# gymlife

## Overview

gymlife is a lightweight web application for managing gym-related data (members, trainers, workouts, schedules, and
progress). The project is built to run on a local PHP/Apache environment (XAMPP) with a MySQL database.

## Key Functionalities

- User authentication (members and admins)
- Member management: create, update, view member profiles
- Trainer management: schedule and assign trainers
- Workout plans: create and track workouts for members
- Class/schedule management: add and view class times
- Progress tracking: store measurements and progress logs
- Simple admin panel to manage data

## Technologies

- PHP (server-side)
- MySQL / MariaDB (database)
- Apache (via XAMPP)
- HTML, CSS, JavaScript (front-end)
- Common libraries (Bootstrap, jQuery) — adjust according to project files

## Setup (local using XAMPP)

1. Install XAMPP: https://www.apachefriends.org/
2. Place project folder:
    - Copy the `gymlife` folder into `C:\xampp\htdocs\`
3. Start services:
    - Open XAMPP Control Panel → Start Apache and MySQL
4. Database:
    - If a SQL dump exists (e.g., `database.sql`), import it via phpMyAdmin or command line:
        - phpMyAdmin: http://localhost/phpmyadmin → Import → choose SQL file
        - CLI: `mysql -u root -p your_db_name < database.sql`
    - Create a database (e.g., `gymlife`) and update DB credentials in the project config (search for `config.php`,
      `.env` or DB connection files)
5. Access the app:
    - Open a browser: http://localhost/gymlife/

## Configuration hints

- Locate DB settings (commonly in `config.php`, `db.php`, or an `.env` file) and update host/user/password/database.
- Ensure file permissions are correct for any upload directories (if used).
- If using Composer or npm, run `composer install` or `npm install` in the project root (only if those files exist).

## Project structure (typical)

- /assets or /public — CSS, JS, images
- /includes or /app — application logic, DB connections
- /views or /templates — HTML/PHP views
- index.php — application entry
- README.md — this file

(Adjust names above to match the actual repository layout.)

## Usage

- Register or login (if authentication exists).
- Use admin panel to add trainers, classes, and members.
- Create workout plans and assign them to members.
- View member progress and schedules.

## Troubleshooting

- Blank pages: enable PHP errors in `php.ini` or check Apache error log.
- DB connection issues: verify credentials and that MySQL is running.
- 404 when accessing routes: confirm files are in `C:\xampp\htdocs\gymlife` and you're using the correct URL (
  `/gymlife/`).

## Contributing

- Fork the repo, create a feature branch, commit changes, and open a pull request.
- Keep changes focused and include short descriptions in commits.

## License

- Add your preferred license or contact the project owner. (No license file included by default.)

## Contact

- For questions or issues, contact the project maintainer or open an issue in the repository.
