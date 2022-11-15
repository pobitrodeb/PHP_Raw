<?php include 'master/headerr.php' ?>

                <div class="col-md-9">
                    <a href="add-user.php" class="btn btn-primary w-5 mb-3">Add New User </a>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-center bg-primary text-white">
                            <tr>
                                <th>SL NO:</th>
                                <th>Name </th>
                                <th>Email </th>
                                <th>Password </th>
                                <th>Role  </th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> Pobitro Deb </td>
                                <td> pobitrodn@gmail.com </td>
                                <td> 12456</td>
                                <td> Admin </td>
                                <td> 
                                    <a href="" class="btn btn-warning">Edit </a>
                                    <a href="" class="btn btn-danger" onclick="return confirm('Are you sure to delete this ?');"> Delete </a>
                            </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                
<?php include 'master/footer.php' ?>