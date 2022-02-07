<?php
include "./components/header.php";
?>



<div class="card mb-3" style="max-width: 700px;
   height: 700px;
   display: inline;
   ">
  <div class="row g-0 row-g-0-div-cuser" style="align-items: center; margin-left: 20%;">
    <div class="col-md-4">
      <img src="./styles/Images/istockphoto-1266123155-170667a.jpg" class="img-fluid img-fluid-cuser rounded-start" alt="create-user">
    </div>
    <div class="col-md-8">
      <div class="card-body p-3">
        <form style="
    max-width: max-content;
    margin-top:2rem;
    flex-direction: column;
    align-items: center;
" class="d-flex">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-group-text-cuser" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg></span>
            </div>
            <input type="text" class="form-control cuser-input" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-group-text-cuser" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                </svg>
              </span>
            </div>
            <input type="text" class="form-control cuser-input" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-group-text-cuser" id="basic-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                  <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                </svg>
              </span>
            </div>
            <input type="digits" class="form-control cuser-input" placeholder="Balance" aria-label="Balance" aria-describedby="basic-addon1" required>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
include "./components/footer.php";
?>