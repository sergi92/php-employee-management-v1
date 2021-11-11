<!-- TODO Employee view -->
<?php
require_once("../assets/html/header.html");
?>
<div class="container">
    <form method="POST" action="dashboard.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Input Name" />
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Input Last Name" />
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Input Email" />
        </div>

        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" id="gender" name="gender">
                <option selected value="choose">Choose...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Input City" />
                </div>

                <div class="form-group col-md-4">
                    <label for="street">Street Address</label>
                    <input type="text" class="form-control" id="street" name="street" placeholder="Input City" />
                </div>

                <div class="form-group col-md-2">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="Input State" />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="Input your age" />
                </div>

                <div class="form-group col-md-4">
                    <label for="zipCode">Postal Code</label>
                    <input type="text" class="form-control" name="zipCode" id="zipCode" placeholder="Input Zipcode" />
                </div>

                <div class="form-group col-md-6">
                    <label for="inputZip">Phone Number</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Input Phone Number" />
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-secondary">Return</button>
    </form>
</div>

<?php
require_once("../assets/html/footer.html");
?>