<div class="row justify-content-center my-5">
    <div class="col-md-12">
        <div class="card shadow bg-light">
            <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                <div class="mx-3 my-3">
                    <div>
                        <x-jet-application-logo style="width: 317px;" />
                    </div>

                    <h3 class="h3 my-4">
                        Welcome to your Jetstream application <strong>{{Auth::user()->name}}</strong>!
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
