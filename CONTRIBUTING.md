# Contributing to Job Hub

Thank you for considering contributing to Job Hub! We are excited to collaborate with developers like you to improve this project. Below are guidelines to help you understand how to get started.

## 📋 Code of Conduct

Please note that by participating in this project, you agree to uphold our [Code of Conduct](#code-of-conduct). Respect and kindness are expected at all times.

## 🛠 Setting Up the Project

1. **Fork the Repository**: Start by forking the project repository to your GitHub account.

2. **Clone the Repository**: Clone the repository to your local machine.

   ```bash
   git clone https://github.com/junesdream/job-hub.git
   cd job-hub
   ```

3. **Install Dependencies**: Run the following commands to install all dependencies:

   ```bash
   composer install
   npm install
   ```

4. **Set Up Environment**:
   - Copy `.env.example` to `.env` and update the necessary environment variables.
   - If you are using Docker and Sail, start the containers:
     ```bash
     ./vendor/bin/sail up -d
     ```

5. **Run Migrations and Seeders**:
   ```bash
   ./vendor/bin/sail artisan migrate --seed
   ```

## 🖋 Contributing Code

- **Branch Naming**: For new features or fixes, create a new branch. Use descriptive branch names, such as `feature/add-job-filter` or `bugfix/fix-edit-job`.

- **Commit Messages**: Write meaningful commit messages that describe the changes concisely.

- **Pull Request**: Once changes are complete:
  1. Push the branch to your forked repository.
  2. Create a pull request to the `main` branch of this repository.
  3. Provide a detailed description of the changes, any issues addressed, and test instructions.

- **Code Review**: Your pull request will be reviewed. Please be open to feedback and make suggested changes.

## 📦 Testing

Ensure that all features are well-tested. Before submitting your pull request, run all tests:

```bash
./vendor/bin/sail artisan test
```

## 🚀 Feature Requests and Bug Reports

- **Feature Requests**: To suggest new features, create a new issue with the tag `enhancement`.
- **Bug Reports**: Report bugs by opening a new issue, providing as much information as possible (steps to reproduce, screenshots, etc.).

## 🙏 Acknowledgements

We appreciate all the contributions made to Job Hub. Your time and effort are invaluable, and we look forward to building a better tool together!

---

## Code of Conduct

Job Hub adheres to a simple code of conduct: be respectful and considerate to others. No harassment or rude behavior will be tolerated. Constructive criticism is always welcome, and we strive to create an inclusive environment for all contributors.

