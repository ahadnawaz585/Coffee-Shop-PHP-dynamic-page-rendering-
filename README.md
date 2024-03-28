
# Dynamic Page Rendering with PHP and Apache

This project demonstrates how to render dynamic pages using PHP with Apache. It provides a simple and efficient way to create dynamic HTML content by separating the view logic from the application logic.

## Getting Started

To get started with this project, follow these steps:

1. Clone the repository into your Apache web server's document root directory (e.g., `htdocs`):
    ```bash
    git clone https://github.com/ahadnawaz585/Coffee-Shop-PHP-dynamic-page-rendering-/tree/master/app
    ```

2. Set up a local development environment with Apache and PHP installed.

3. Start Apache web server.

4. Visit `http://localhost` in your web browser to view the dynamic pages rendered by the application.


## Usage

### Creating New Pages

To create new dynamic pages:

1. Create a new PHP file for the page content (e.g., `contact.php`).
2. Include the necessary header and footer files from the `includes/` directory.
3. Write the PHP logic to generate dynamic content within the page file.
4. Link to the new page from existing pages or navigation menus.

### Adding Stylesheets and JavaScript

To include stylesheets and JavaScript files:

1. Place CSS files in the `assets/css/` directory.
2. Place JavaScript files in the `assets/js/` directory.
3. Link to these files in the HTML templates using the appropriate tags.

### Modifying Templates

To modify existing templates:

1. Edit the PHP files to update the HTML structure and content.
2. Use PHP to include dynamic content or logic in the templates as needed.


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

