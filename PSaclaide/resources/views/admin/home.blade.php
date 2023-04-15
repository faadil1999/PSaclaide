@extends("layouts.web")

@section("main")

		<div class="content">
			<div class="container-fluid">
				@if(session()->has('message'))
				<div class="alert alert-success" role="alert">
					{{ session()->get('message') }}
				  </div>
				@endif  
				<h4 class="page-title">Dashboard</h4>
				<div class="container rounded mt-5 mb-5" >

                    <h2 class="mb-4">A propos de nous</h2>
                    <p>Nous sommes une équipe de 5 étudiants qui visons à aider le plus grand nombre blablablabla Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quae sunt in quo veritatis consequuntur dicta et, dolores iusto repellat voluptatibus cum facere praesentium asperiores est alias voluptatem rerum. Reiciendis!</p>
                    <div class="mb-3">
                        <h3 class = "form-label" >Donnez nous votre avis !</h3>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Pas de langue de bois !"></textarea>
                        <div class="space"></div>
                        <br>
                        <button type="submit" id="submitapropos" class="btn btn-primary">Submit</button>
                      </div>
                        
                </div>
			</div>
		</div>
		
@endsection