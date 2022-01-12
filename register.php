<?php include 'incl/header.php'; ?>

<div class="container">
    <div class="row justify-content-center pt-3">
        <div class="col-lg-7 col-md-7 col-sm-12 py-5">
            <form id="regForm" action="register.php" method="POST">
                <div class="form-group">
                    <label for="name">Residents Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="pNo">Phone Number</label>
                    <input type="tel" class="form-control" id="pNo" name="pNo" required>
                </div>
                <div class="form-group">
                    <label for="occupantsNo">Number of Occupants in the house</label>
                    <input type="number" class="form-control" id="occupantsNo" name="occupantsNo" required>
                </div>

                <button type="submit" id="submit" class="btn btn-warning px-4 px-2 d-block mx-auto my-5">Submit</button>
            </form>
        </div>
    </div>
</div>



<?php include 'incl/footer.php'; ?>
<script>
    $(document).ready(function() {
        $('.nav-item').removeClass('active');
        $('#reg').addClass('active');
    });
</script>
<script>
    $(document).ready(function() {
        $('#submit').click(function(e) {
            e.preventDefault();
            var check = $('#regForm')[0].checkValidity();
            if (check) {
                $.ajax({
                    method: "POST",
                    url: "function.php",
                    data: $('#regForm').serialize(),
                    dataType: "text",
                    success: function(response) {
                        if (response === "success") {
                            swal({
                                title: "Success!",
                                text: "You have succefully registered your Recidence!",
                                icon: "success",
                            }).then(function() {
                                $('form').trigger("reset");
                                $('#name').focus();
                            });
                        } else {
                            swal({
                                title: "Error!",
                                text: "Something went wrong " + response,
                                icon: "error",
                            });;
                        }
                    }
                })
            } else {
                $('form')[0].reportValidity();
            }


        })
    });
</script>