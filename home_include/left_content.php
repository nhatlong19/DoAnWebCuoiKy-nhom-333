
 <div id="danhmucsp">
					<div class="center">
					<h4>SẢN PHẨM</h4>
					<?php 
					   $sql="select * from danhmuc where dequi=1";
					   $result=mysql_query($sql);
					?>
						<ul>
						<?php 
						   while($row=mysql_fetch_array($result))
						   {
						?>
							<li><a href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"];?></a></li>
							<?php } ?>
							
							
						</ul>
					</div><!-- End .center -->
				</div>	<!-- End .menu-left -->
				
				<div id="phukien">
					<div class="center">
						<h4> PHỤ KIỆN</h4>
						<?php 
					   $sql="select * from danhmuc where dequi=2";
					   $result=mysql_query($sql);
					?>
						<ul>
						<?php 
						   while($row=mysql_fetch_array($result))
						   {
						?>
							<li><a href="index.php?madm=<?php echo $row['madm'] ?>"><?php echo $row["tendm"];?></a></li>
							<?php } ?>
							
						</ul>
					</div><!-- End .center -->
				</div><!-- End .phukien -->	
				<div id="timkiem">
					<div class="center1">
						<h4>TÌM KIẾM </h4>
							<div id="select">
								<form action="index.php?content=timkiem" method="GET">
								<input type="hidden" name="content" value="timkiem">
								<input type="text" name="timkiem" />
								<div id="select2">
									<select name="gia">
										<option value="0"> - Chọn giá - </option>
										<option value="1"> Dưới 1 triệu</option>
										<option value="2">1 triệu - 3 triệu</option>
										<option value="3">3 triệu - 5 triệu</option>
										<option value="4">5 triệu - 8 triệu</option>
										<option value="5">8 triệu - 10 triệu</option>
										<option value="6"> Trên 10 triệu</option>
									</select>
									<input type="submit" name="btntk" value="Tìm kiếm" />
								</form>
								</div><!-- End .select2-->
							</div><!-- End .select-->
					
					</div><!-- End .center1-->
				</div><!-- End .timkiem-->			
