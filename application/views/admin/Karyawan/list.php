<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Karyawan Id</th>
										<th>Nama</th>
										<th>Address</th>
										<th>No Telfon</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($Karyawan as $Karyawan): ?>
									<tr>
										<td width="150">
											<?php echo $Karyawan->karyawan_id ?>
										</td>
										<td>
											<?php echo $Karyawan->name ?>
										</td>
                                        <td>
											<?php echo $Karyawan->address ?>
										</td>
                                        <td>
											<?php echo $Karyawan->telepon ?>
										</td>
										
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						