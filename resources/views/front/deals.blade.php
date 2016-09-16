{!! $header !!}

<div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Check Out Our Awesome Deals
                </h1>
            </div>
         </div>
        <!-- /.row --> 
         <?php $class = 0; ?>
        @foreach ($dealsDB as $deal)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading @if($class%2==0) green @else blue @endif">
                        <h4><i class="fa fa-fw fa-gift"></i>{{ $deal->title }}</h4>
                    </div>
                    <div class="panel-body">
                        <p>{{  $deal->content }}</p>
                    </div>
                </div>
            </div>
         <?php $class++;?>
	@endforeach	
</div>

{!! $footer !!}