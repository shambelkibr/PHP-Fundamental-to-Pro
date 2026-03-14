# Todo List Application

A simple but complete todo list application demonstrating beginner PHP concepts.

## Features

- Add new tasks
- Mark tasks as complete
- Delete tasks
- Session-based storage (no database required)
- Input validation
- Clean, responsive interface

## Concepts Demonstrated

- Session management
- Form handling
- Input validation
- Control structures
- Arrays
- Functions

## Installation

1. Ensure PHP 7.4+ is installed
2. Navigate to this directory
3. Start PHP's built-in server:
   ```bash
   php -S localhost:8000
   ```
4. Open browser to http://localhost:8000

## Usage

1. Enter a task in the input field
2. Click "Add Task" to add it to your list
3. Click checkbox to mark as complete
4. Click "Delete" to remove a task

## Learning Points

- **Sessions**: Tasks are stored in `$_SESSION`
- **POST Requests**: Form submissions handled via POST
- **Validation**: Input is validated before processing
- **Sanitization**: User input is sanitized with `htmlspecialchars()`
