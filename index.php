<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee Management System</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <div class="header">

        <h1>Employee Management System</h1>

        <p>Employee Details Form</p>

    </div>


    <form action="save_employee.php" method="POST">

        <div class="form-grid">


            <!-- Employee ID -->

            <div class="form-group">

                <label for="employee_id">
                    Employee ID *
                </label>

                <input
                    type="text"
                    id="employee_id"
                    name="employee_id"
                    placeholder="Example: EMP001"
                    required
                >

            </div>


            <!-- Full Name -->

            <div class="form-group">

                <label for="full_name">
                    Full Name *
                </label>

                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    placeholder="Enter full name"
                    required
                >

            </div>


            <!-- Email -->

            <div class="form-group">

                <label for="email">
                    Email *
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="example@gmail.com"
                    required
                >

            </div>


            <!-- Phone -->

            <div class="form-group">

                <label for="phone">
                    Phone Number
                </label>

                <input
                    type="text"
                    id="phone"
                    name="phone"
                    placeholder="Enter phone number"
                >

            </div>


            <!-- Department -->

            <div class="form-group">

                <label for="department">
                    Department
                </label>

                <select
                    id="department"
                    name="department"
                >

                    <option value="">
                        Select Department
                    </option>

                    <option value="HR">
                        HR
                    </option>

                    <option value="IT">
                        IT
                    </option>

                    <option value="Finance">
                        Finance
                    </option>

                    <option value="Sales">
                        Sales
                    </option>

                    <option value="Marketing">
                        Marketing
                    </option>

                    <option value="Operations">
                        Operations
                    </option>

                </select>

            </div>


            <!-- Designation -->

            <div class="form-group">

                <label for="designation">
                    Designation
                </label>

                <input
                    type="text"
                    id="designation"
                    name="designation"
                    placeholder="Example: Software Developer"
                >

            </div>


            <!-- Salary -->

            <div class="form-group">

                <label for="salary">
                    Salary
                </label>

                <input
                    type="number"
                    id="salary"
                    name="salary"
                    step="0.01"
                    min="0"
                    placeholder="Enter salary"
                >

            </div>


            <!-- Joining Date -->

            <div class="form-group">

                <label for="joining_date">
                    Joining Date
                </label>

                <input
                    type="date"
                    id="joining_date"
                    name="joining_date"
                >

            </div>


            <!-- Gender -->

            <div class="form-group">

                <label for="gender">
                    Gender
                </label>

                <select
                    id="gender"
                    name="gender"
                >

                    <option value="">
                        Select Gender
                    </option>

                    <option value="Male">
                        Male
                    </option>

                    <option value="Female">
                        Female
                    </option>

                    <option value="Other">
                        Other
                    </option>

                </select>

            </div>


            <!-- Address -->

            <div class="form-group full-width">

                <label for="address">
                    Address
                </label>

                <textarea
                    id="address"
                    name="address"
                    rows="4"
                    placeholder="Enter employee address"
                ></textarea>

            </div>

        </div>


        <div class="buttons">

            <button
                type="reset"
                class="clear-btn"
            >
                Clear
            </button>


            <button
                type="submit"
                class="save-btn"
            >
                Save Employee
            </button>

        </div>

    </form>

</div>

</body>

</html>
