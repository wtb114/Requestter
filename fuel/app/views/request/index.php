<div class="container">
	<div class="row">
		<div class="col-md-8">
		  <img src="/assets/img/photo3.png" alt="">
		</div>
		<div class="col-md-4">
		  <img src="/assets/img/logo02.gif" alt="">
			<h1>Please Request ！ </h1>
			<p> ここは、我がサークルのリクエストサイトです。次の活動や飲み会、ミーティングなど、気になることがあればどんどんリクエストしてください。</p>
			<form action="" method="post">
				<div class="col-md-12">
					<?php echo Html::anchor('request/create','リクエストを投稿', array('class' => 'btn btn-success')); ?>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="well text-center">
				投稿されたリクエスト
			</div>
		</div>
	</div>
	<div class="row">
		<?php foreach ($requests as $item): ?>
			<div class="col-md-4" >
				<h3><?php echo Str::truncate($item->body,12, '', true); ?></h3>
				<p>【投稿日時】
				<?php echo date("Y-m-d H:i", $item->created_at); ?></p>
				<p>【IP】<?php echo $item->ip; ?></p>
				<p><?php echo Str::truncate($item->body,80, '', true); ?></p>
				<?php echo Html::anchor('request/edit/'.$item->id, '<i class="icon-wrench">
				</i> 編集', array('class' => 'btn btn-default btn-sm')); ?>
				<?php echo Html::anchor('request/delete/'.$item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm(' このデータを削除します。よろしいですか?')")); ?>
			</div>
		<?php endforeach; ?>
	</div>
	<!-- /.row -->
</div>