# Ultra PHP Framework

Ultra is a lightweight, custom PHP MVC framework designed to help you build scalable and maintainable web applications quickly and efficiently. It supports routing, database connections, models, views, and controllers with clean and simple syntax.

---

## Features

- Simple and flexible routing with support for dynamic parameters
- PDO-based database connection management with support for multiple connections
- Model loading and QueryBuilder integration
- View rendering with data passing
- Easy configuration with environment-based settings
- Helper functions and libraries support
- Middleware-ready architecture for future extensions

---

## Getting Started

1. Clone the repository:
    ```bash
    git clone https://github.com/reeteshjee/ultraphp.git
    ```

2. Configure your database and framework settings in the config files.

3. Define routes, create controllers, models, and views as per your application needs.

4. Start the built-in development server:
    ```bash
    cd ultraphp
    ./ serve
    ```
    By default, it will run at `http://localhost:3333/`.

---

## Documentation

The complete user guide with detailed explanation, code examples, and configuration instructions is available here:

👉 [Ultra PHP Framework User Guide](https://yourwebsite.com/ultra-userguide)

---

## Directory Structure

ultra
    app
        controllers
             Home.php
             Postman.php
        helpers
             cache.php
             file.php
             general.php
             request.php
             response.php
             url.php
        models
             NewsModel.php
        views
             home.php
    config
              config.php
              constants.php
              db.php
    core
              QueryBuilder.php
              Ultra.php
    public
              .htaccess
              index.php
    writable
              cache
              logs
    autoload.php
    routes.php

---

## Requirements

- PHP 8.0 or higher
- PDO extension enabled
- MySQL or compatible database

---

## Contributing

Feel free to open issues or submit pull requests to improve the framework!

---

## License

This project is licensed under the MIT License.

---

## Contact

For questions or support, reach out to [reeteshghimire@gmail.com](mailto:reeteshghimire@gmail.com)

---

Happy coding with Ultra! 🚀


