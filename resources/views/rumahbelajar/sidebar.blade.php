</div>
			<div class="col-md-4">
			    <div class="panel panel-default">
					<div class="panel-heading">
						<h4>Latest News</h4>
					</div>
					<ul class="list-group">
   						@foreach($beritaterakhir as $berita)
   						<li class="list-group-item">{!!link_to_route('berita.tampil',$berita->judul,$berita->id)!!}</li>
						@endforeach
					</ul>

				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Kategori</h4>
					</div>
					<ul class="list-group">
						@foreach($kategori as $data)
						<li class="list-group-item">{!! link_to_route('kategori.tampil',$data->judul_kategori,$data->id_kategori) !!}</li>
						@endforeach
					</ul>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4>Pustekkom</h4>
					</div>
					<ul class="list-footer">
						<a href="http://setjen.kemdikbud.go.id/pustekkom/" target="_blank">
							<img src="{{ asset('logo2.png') }}">
						</a>
						<a href="http://belajar.kemdikbud.go.id/" target="_blank">
							<img src="{{ asset('logo.png') }}" style="width: 150px; padding-left:10px;">
						</a>
						<a href="http://tve.kemdikbud.go.id/" target="_blank">
							<img src="{{ asset('tv_edukasi.png') }}" style="width:83px;">
						</a>
						<a href="http://suaraedukasi.kemdikbud.go.id/" target="_blank">
							<img src="{{ asset('suara_edukasi.gif') }}" style="height:57px; padding-left:10px;">
						</a>
					</ul>
				</div>

			</div>
				</div>
				</div>

				