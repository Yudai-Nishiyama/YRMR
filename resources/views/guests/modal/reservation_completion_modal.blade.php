
    <div class="modal fade" id="reservation-completion-id">
        <div class="modal-dialog" style="border:2px solid #448A47; border-radius:13px;">
            <div class="modal-content" >
                <div class="modal-header justify-content-center" style="border-bottom : 1px solid #448A47;">
                    <p class="my-auto" style="color:#448A47;">Reservation Confirmation</p>
                </div>
                <div class="modal-body fw-bold py-0">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-2 text-center">
                            <i class="fa-regular fa-circle-check fa-fw" style="color:#448A47; font-size: 30px;"></i>
                        </div>
                        <div class="col-10 mt-4">
                            <p style="font-size: 24px; font-family: 'Bona Nova', sans-serif;">Are you sure you want to book this room?</p>
                        </div>
                    </div>
                </div>
                <form action="#" method="post">
                <div class="modal-footer border-0 justify-content-center pt-0">
                    @csrf
                    @method('DELETE')

                    <a href="#" class="btn fw-bold mb-3" style="background-color:#F4BB4B; color:#981E1E; width: 180px;">Return to the Page</a>
                    <button type="submit" class="btn mb-3 fw-bold" style="background-color:#448A47; color:#FFFFFF; width: 180px;">Reservation</button>
                </div>
            </form>
            </div>
        </div>
    </div>
