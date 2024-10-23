# Wedding Management System

## Description
This is a wedding management application built with Laravel. It helps manage guests, events, and RSVPs efficiently.

## Features
- Add, view, and manage guests
- Track RSVP statuses
- Associate guests with specific events
- User-friendly interface for managing weddings

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/muchikha/wedding-management.git
2. **Navigate to the project directory**
   ```
    cd wedding-management
3. **Install dependencies**
    ```
    composer install
    ```
4. **Set up your environment**
- Copy the .env.example file to .env
- Update your database credentials in the .env file

5. **Generate application key**
    ```bash
    php artisan key:generate
    ```
6. **Run migrations**
    ```bash
    php artisan migrate
    ```
7. **Serve the application**
    ```bash
    php artisan serve
    ```

## Usage
- Access the application at http://127.0.0.1:8000
- Navigate to /guests/create/{eventId} to add a guest to a specific event.

## Contributing
Contributions are welcome! Please create a pull request or open an issue to discuss changes.

## License
This project is licensed under the MIT License - see the LICENSE file for details.

### Steps to Update Your README.md

1. Open your `README.md` file in your preferred text editor.
2. Replace the existing content with the structured content provided above.
3. Customize the sections according to your project's specifics, especially the features and usage instructions.
4. Save the file.
5. Commit your changes and push them to your GitHub repository:

   ```bash
   git add README.md
   git commit -m "Updated README to reflect project details"
   git push

This will give your README a more project-specific focus, helping others understand what your wedding management system is about.
