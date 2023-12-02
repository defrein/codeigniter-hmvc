<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <?php $this->load->view("signup/include/load-styles") ?>
</head>

<body>
    <div class="container">
        <div class="col-sm-12">
            <div class="col-sm-8">
                <h4>User Registration</h4>
                <form action="javascript:void(0)">
                    <div class="form-group">
                        <label for="txtname">Name</label>
                        <input type="text" class="form-control" id="txtname" placeholder="Enter your name" name="txtname" required>
                    </div>
                    <div class="form-group">
                        <label for="txtemail">Email</label>
                        <input type="email" class="form-control" id="txtemail" placeholder="Enter your email" name="txtname" required>
                    </div>
                    <div class="form-group">
                        <label for="txtmobile">Mobile</label>
                        <input type="number" min="1" class="form-control" id="txtmobile" placeholder="Enter your mobile" name="txtmobile" required>
                    </div>
                    <div class="form-group">
                        <label for="dddesignation">Select Designation</label>
                        <select class="form-control" name="dddesignation" id="dddesignation" required>
                            <option value="">Choose Designation</option>
                            <option value="web designer">Web Designer</option>
                            <option value="web developer">Web Developer</option>
                            <option value="tester">Tester</option>
                            <option value="ba">BA</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>

    </div>


    <?php $this->load->view("signup/include/load-scripts") ?>
</body>

</html>