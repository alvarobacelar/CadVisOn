	  (function($){
	  	$.fn.extend({
	  		
	  		doc_validate:function(options){
	  			var padrao ={
	  					valid:"green",
	  					invalid:"red",
	  					doc_type:'cpf'
	  				};
	  			var validate_cpf = function(cpf_number){
	  						cpf_number = cpf_number.replace('.','');
	  						cpf_number = cpf_number.replace('.','');
	  						cpf_number = cpf_number.replace('-','');
	  						cpf_number = cpf_number.split('');
	  						if(cpf_number.length != 11)
	  						{
	  							return false;
	  						}
	  						var result = 0;
	  						var a = [10,9,8,7,6,5,4,3,2];
	  						for(var i=0; i<a.length;i++)
	  						{
	  							result = result + (a[i]*cpf_number[i]);
	  							
	  						}
	  						result = result%11;
	  						result = ((Math.round(result*1))/1); 
	  						if(result<2)
	  						{
	  							first_dig = 0;
	  						}
	  						else
	  						{		
	  							first_dig = (11-result);
	  						}
	  						if(first_dig!=cpf_number[9])
	  						{
	  							return false;
	  						}

	  						a = [11,10,9,8,7,6,5,4,3,2];
	  						result = 0;
	  						for(var i=0; i<a.length;i++)
	  						{
	  							result = result + (a[i]*cpf_number[i]);
	  							
	  						}
	  						result=result%11;
	  						
	  						result = ((Math.round(result*1))/1);

	  						second_dig = 11-result;
	  						if(cpf_number[10!=second_dig])
	  						{
	  							return false;
	  						}
	  						return true;

	  					}
	  			var validate_cnpj = function(cnpj_number){
	  				
	  				cnpj_number = cnpj_number.replace('.','');
					cnpj_number = cnpj_number.replace('.','');
					cnpj_number = cnpj_number.replace('-','');
					cnpj_number = cnpj_number.replace('/','');
					cnpj_number = cnpj_number.split('');
					if(cnpj_number.length != 14)
					{
						return false;
					}
					var result = 0;
					a = [5,4,3,2,9,8,7,6,5,4,3,2];
					for(var i=0; i<a.length;i++)
					{
						result = result + (a[i]*cnpj_number[i]);
					}
					result = result%11;
	  				result = ((Math.round(result*1))/1);
	  				if(result<2)
					{
						first_dig = 0;
					}
					else
					{
						first_dig = (11-result);
					}
					if(first_dig!=cnpj_number[12])
					{
						return false;
					}
					// 
					result = 0;
					a = [6,5,4,3,2,9,8,7,6,5,4,3,2];
					for(var i=0; i<a.length;i++)
					{
						result = result + (a[i]*cnpj_number[i]);
						
					}
					result=result%11;
					
					result = ((Math.round(result*1))/1);

					second_dig = 11-result;
					if(cnpj_number[13]!=second_dig)
					{
						return false;
					}
					return true;
	  			}
	  			$.extend(padrao.options);
	  			return this.each(function(){
	  				$(this).change(function(){
	  					number = $(this).val();
	  					console.log(options.valid);
			  			switch(options.doc_type)
			  			{
			  				case 'cpf':
			  					
			  					if(validate_cpf(number)==false)
			  					{
			  						$(this).css('color', options.invalid);
			  					}
			  					else
			  					{
			  						$(this).css('color', options.valid);
			  					}
			  					break;
			  				case 'cnpj':
			  					if(validate_cnpj(number)==false)
			  					{
			  						$(this).css('color', options.invalid);
			  					}
			  					else
			  					{
			  						$(this).css('color', options.valid);
			  					}
			  					break;
			  					break;
		  				}
	  				});
	  				
	  			});
	  		}
	  	});

	  })(jQuery);
