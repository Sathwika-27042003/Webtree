# Student Attendance Tracker

A Laravel-based web application for managing student attendance records.

## Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and npm
- SQLite (or other database of your choice)

## Project Setup

1. **Clone the repository**
```bash
git clone <repository-url>
cd student
```

2. **Install PHP Dependencies**
```bash
composer install
```

3. **Configure Environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Setup Database**
```bash
touch database/database.sqlite
php artisan migrate
```

5. **Install Frontend Dependencies**
```bash
npm install
npm run build
```

6. **Start the Application**
```bash
php artisan serve
```
Access the application at `http://localhost:8000`

## Routes & Features

| Route | Purpose |
|-------|---------|
| `/students` | Add new students to the system |
| `/delete-student` | Remove students from the system |
| `/addsheet` | Take attendance for the day |
| `/attandance` | View attendance records |

## Key Features

1. **Student Management**
   - Add new students with roll numbers
   - Delete existing students
   - View student list

2. **Attendance Management**
   - Mark students as present/absent
   - View daily attendance records
   - Track attendance history

## Database Structure

### Students Table
- roll_number (Primary Key)
- name
- timestamps

### Attendance Table
- id
- roll_number (Foreign Key)
- date
- status (present/absent)
- timestamps

## Assumptions

1. Each student has a unique roll number
2. Attendance can only be marked once per day per student
3. SQLite is used as the default database
4. Basic authentication is required for access

## Known Limitations

1. No bulk upload feature for students
2. No export functionality for attendance records
3. No student profile pictures
4. No advanced reporting features
