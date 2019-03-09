@extends(env('THEME_NAME').'.layouts.frontend')

@section('content')

    <div class="container-fluid">
        <div class="sectionheader">
            <h2><span>PRODUCTS</span> CATALOGE</h2>
            <h3>Download OUR CATALOGE</h3>
        </div>
        <div class="cataloges">'
            <?php for($i=0;$i<10;$i++){ ?>
            <a class="cataloge">
                <div class="catalogedl"></div>
                <div class="catalogecontent"><span>CATALOGE NUMBER 1</span><span>DESCRIPTION ABOUT THIS …</span></div>
                <div class="catalogemodified"><span>23</span><span>SEP</span></div>
            </a>
            <?php } ?>

        </div>
    </div>
    @endsection


@section('title')
	Catalog
@endsection
