<?php require 'header.php'; ?>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Cours de PHP & MySQL</h1>
            <p class="lead text-muted">TP MySQL Liste de films.</p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <a href="add.php" class="btn btn-success">Add new film</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                             xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                             role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="view.php?id=" class="btn btn-sm btn-outline-primary">View</a>
                                    <a href="edit.php?id=" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a href="delete.php?id=" class="btn btn-sm btn-outline-danger">Delete</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<?php require 'footer.php'; ?>