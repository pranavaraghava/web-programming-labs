# Web Programming Lab Repository

A collection of practical exercises completed as part of the **B.Tech Computer Science and Engineering – Web Programming** course at Jain University, Bengaluru.

This repository contains 12 laboratory exercises covering HTML, CSS, JavaScript, XML, and PHP. Each lab demonstrates fundamental web development concepts through practical implementations and interactive web pages.

## Technologies and Tools

- **HTML5** – Page structure, forms, tables, links, and frames.
- **CSS3** – Styling, layouts, and responsive web design.
- **JavaScript** – DOM manipulation, form validation, interactive functionality, and browser storage.
- **XML** – Structured data representation and browser-based XML parsing.
- **PHP** – Server-side scripting, session management, date and time handling, and form processing.
- **Web Browser** – Running and testing web applications.
- **PHP Development Server / XAMPP** – Executing PHP-based applications locally.
- **Visual Studio Code** – Code editing and development.

## Labs and Experiments

### Lab 1 – Book Information

**Folder:** `Lab1_Book_Information`

A book information website that displays a collection of books. Selecting a book opens its dedicated information page containing:

- Book title and cover image
- Author name
- Genre
- Publication year
- Book description

**Books included:** The Alchemist, Atomic Habits, The Great Gatsby, and Ikigai.

### Lab 2 – Product Information

**Folder:** `Lab2_Product_Information`

An HTML-based product information page that displays electronic products in a structured table.

The table includes product images or icons, product names, brands, prices, and specifications.

**Products included:**
- Samsung Galaxy A55
- Lenovo IdeaPad Slim 5
- Apple AirPods 4
- Samsung Galaxy Watch

### Lab 3A – Cultural Festival Registration Form

**Folder:** `Lab3A_Cultural_Festival_Form`

A registration form designed for participants attending a cultural festival.

Features include:
- Personal and institution details
- Gender selection
- Event selection
- Interests and performance information
- Mandatory field validation
- Ten-digit mobile number validation
- Submit and reset buttons

### Lab 3B – Book Information Using Frames

**Folder:** `Lab3B_Book_Frames`

An HTML frameset-based website that displays a book list and book information in separate sections.

Selecting a book from the list loads its corresponding information page in the adjacent frame.

### Lab 4 – Country and Capital

**Folder:** `lab4`

An interactive webpage that displays the capital of a selected country using JavaScript.

**Countries included:**
- India – New Delhi
- USA – Washington, D.C.
- United Kingdom – London
- Japan – Tokyo
- France – Paris

The displayed capital updates dynamically based on the selected country.

### Lab 5 – College Information Page

**Folder:** `Lab5`

A college information webpage presenting details about Jain University.

Features include:
- University location information
- List of offered courses
- Styled webpage layout
- Scrolling notice displaying examination and event announcements

### Lab 6 – Kurnool Travel and Heritage Page

**Folder:** `Lab6`

A travel and heritage webpage highlighting popular tourist attractions in Kurnool, Andhra Pradesh.

**Places covered:**
- Konda Reddy Buruju
- Belum Caves
- Oravakallu Rock Garden
- Mahanandi Temple

The webpage uses CSS styling, multiple content sections, and image assets to present tourist destinations.

### Lab 7 – Mathematical Calculator

**Folder:** `lab7`

A browser-based calculator developed using HTML and JavaScript.

It accepts two numerical inputs and performs the following arithmetic operations:

- Addition
- Subtraction
- Multiplication
- Division

The application also handles division-by-zero errors and displays an appropriate message.

### Lab 8 – User Information Form

**Folder:** `lab8`

A user information collection form that accepts:

- Name
- Gender
- Mobile number
- Email address
- City
- State
- Country

JavaScript and browser `sessionStorage` are used to store the submitted information. The saved details are displayed in a separate webpage using an HTML table.

### Lab 9 – XML Student Data Display

**Folder:** `lab9`

A webpage that retrieves and displays student information from an external XML file.

Features include:
- Loading XML data using JavaScript `fetch()`
- Parsing XML records in the browser
- Displaying student details in an HTML table
- Handling missing, invalid, or empty XML data

**Student information displayed:**
- Roll number
- Student name
- Course
- Marks

### Lab 10 – PHP Session Login and Logout

**Folder:** `lab10`

A basic session management application developed using PHP.

Features include:
- User name entry through a form
- Creating and managing PHP sessions
- Displaying a personalized welcome message
- Recording the session start time
- Logging out and destroying the session
- Calculating the total session duration

### Lab 11 – Current Date, Time, and Day

**Folder:** `lab11`

A PHP-based webpage that dynamically displays the current date, time, and day of the week.

The application uses the `Asia/Kolkata` timezone to display Indian Standard Time (IST).

### Lab 12 – Age Verification

**Folder:** `lab12`

A PHP-based age verification application that accepts a user's name and age through an HTML form.

The application processes the submitted information and displays:

- A welcome message for users aged 18 or above.
- An access restriction message for users below 18.

## Installation and Execution

### Prerequisites

Install or configure the following tools:

- Visual Studio Code
- A modern web browser (Google Chrome, Microsoft Edge, etc.)
- PHP runtime or XAMPP for PHP-based experiments

### Running HTML, CSS, and JavaScript Labs

For Labs 1–8:

1. Open the repository in Visual Studio Code.
2. Navigate to the required lab folder.
3. Open the `index.html` file in a web browser.
4. Alternatively, use the VS Code Live Server extension where appropriate.

**Note:** Lab 3B uses the legacy HTML `<frameset>` element, which may not be supported by all modern browsers.

### Running the XML Experiment

For Lab 9, use a local HTTP server because the application loads XML data using JavaScript `fetch()`.

Navigate to the repository folder and execute:

```bash
python -m http.server 8000
```

Open the following URL:

`http://localhost:8000/lab9/index.html`

### Running PHP Experiments

For Labs 10–12, PHP must be installed or configured through XAMPP.

From the repository root, start the PHP development server:

```bash
php -S localhost:8000
```

Open the required experiment using the following URLs:

| Lab | Application URL |
|---|---|
| Lab 10 | `http://localhost:8000/lab10/index.php` |
| Lab 11 | `http://localhost:8000/lab11/index.php` |
| Lab 12 | `http://localhost:8000/lab12/index.php` |

Alternatively, place the repository inside the XAMPP `htdocs` directory and access it through Apache.

## Learning Outcomes

Through these laboratory exercises, the following concepts and skills were practiced:

- Understanding HTML page structure and semantic elements.
- Creating hyperlinks and navigating between multiple webpages.
- Designing tables, forms, and input controls.
- Applying CSS for webpage styling and layouts.
- Developing interactive web applications using JavaScript.
- Implementing form validation and DOM manipulation.
- Storing and retrieving browser data using `sessionStorage`.
- Loading and parsing XML documents using JavaScript.
- Understanding client-side and server-side web technologies.
- Processing form submissions using PHP.
- Implementing PHP session creation, management, and destruction.
- Working with date, time, and timezone functionality in PHP.

## Repository Structure

```text
web_programming_labs/
│
├── Lab1_Book_Information/
├── Lab2_Product_Information/
├── Lab3A_Cultural_Festival_Form/
├── Lab3B_Book_Frames/
├── lab4/
├── Lab5/
├── Lab6/
├── lab7/
├── lab8/
├── lab9/
├── lab10/
├── lab11/
├── lab12/
│
└── README.md
```

## Author

**B.Tech – Computer Science and Engineering**

Jain University, Bengaluru, Karnataka, India.

---

*This repository is maintained for academic learning, practical implementation, and reference as part of the Web Programming laboratory course.*
