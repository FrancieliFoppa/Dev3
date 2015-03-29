<?php

/*
 * Classe DTO
 * implementa funcoes basicas dos dtos como
 * getters e setters
 * todos os DTOs devem extender esta classe
*/
abstract class Dto {
	
	//os DTOs devem possuir um vetor chamado atributes contendo
	//todos os atributos da classe
	private $attributes;
	
	//Construtor para atribuir os valores iniciais aos DTOs
	public function __construct($attributes, $properties) {
		$this->attributes = $attributes;
		foreach($properties as $key => $value) {
			if(array_key_exists($key, $this->attributes))
				$this->attributes[$key] = $value;
		}
	}
	
	//Funcao para gerar metodos getters e setters dos dtos
	//Notacao:
	//get<NomeDaVariavel>
	//is<NomeDaVariavel>
	//set<NomeDaVariavel>
	function __call($method, $arguments) {
		
		//pega os tres primeiros chars do metodo para ver se é get ou set
		$prefix = substr($method, 0, 3);
		
		//pega os dois primeiros chars do metodo para ver se é is
		$prefixIs = substr($method, 0, 2);
		
		//propriedade a ser setada ou retornada pelo get ou set
		$property = substr($method, 3, 1) . substr($method, 4);
		
		//propriedade a ser retornada pelo is
		$propertyIs = substr($method, 2, 1) . substr($method, 3);
		
		//caso o nome da funcao ou os a propriedade estejam vazios retorna
		//sem nenhum resultado
		if((empty($prefixIs) && empty($prefix)) || (empty($property) && empty($propertyIs)))
			return;
		
		//caso a funcao chamada for um getter retorna o valor da variavel
		//property
		if($prefix == "get" && isset($property) && array_key_exists($property, $this->attributes)) {
			return $this->attributes[$property];
		}
		
		
		//caso a funcao chamada for um is retorna o valor da variavel
		//property
		if($prefixIs == "is" && isset($propertyIs) && array_key_exists($propertyIs, $this->attributes)) {
			return $this->attributes[$propertyIs];
		}
		
		//caso a funcao chamada for um setter seta o valor da variavel
		//property com o valor de arguments[0]
		if($prefix == "set" && isset($property) && array_key_exists($property, $this->attributes)) {
			return $this->attributes[$property] = $arguments[0];
		}
	}

	//Funcao chamada para retornar os atributos do dto em questao
	//para ser utilizado pelo dao
	function getAttributes() {
		return $this->attributes;
	}
}

?>