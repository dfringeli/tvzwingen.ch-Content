} else if ($pagination === 'prevnext') {
					
				$ris .= '<div class="container-fluid top30"><div class="row"><div class="col-sm-12 col-md-6 col-md-offset-3"><div class="btn-group btn-group-justified" role="group">';

				if ($page_num > 1) {
					$ris .= '<a class="btn btn-default" role="button" href="' . add_query_arg('page', ((int)$page_num - 1), $permalink) . '">' 
					 . __('<i class="fa fa-arrow-left" aria-hidden="true"></i> Neuere Fotos', 'fjgwpp') . '</a>';	
				}

				if ($page_num < $num_pages) {
					$ris .= '<a class="btn btn-default" role="button" href="' . add_query_arg('page', ((int)$page_num + 1), $permalink) . '">' 
					 . __('Ältere Fotos <i class="fa fa-arrow-right" aria-hidden="true"></i>', 'fjgwpp') . '</a>';
				}

				$ris .= '</div></div></div></div>';

			}