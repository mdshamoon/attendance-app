<template>
    <div id="container">
      
    </div>
</template>

<script>


import * as THREE from 'three';
import { OrbitControls } from 'three/examples/jsm/controls/OrbitControls.js';
    export default {

       

        data() {
    return {
      camera: null,
      scene: null,
      renderer: null,
      mesh: null,
      font:null,
      cameraTarget : new THREE.Vector3( 0, 0, 0 )
      
    }
  },





 methods: {
     loadFont: function () {
         var self=this;
         let loader = new THREE.FontLoader();
     loader.load( 'fonts/helvetiker_regular.typeface.json', function ( font ) {
       self.font=font;
     });
     },
    init: function() {
      
     let container = document.getElementById('container');
	this.camera = new THREE.PerspectiveCamera( 75, container.clientWidth / container.clientHeight, 0.1, 1000 );
    this.camera.position.set( 100, 0, 100 );
    this.camera.position.z = 5;
     

    this.scene = new THREE.Scene();
    this.scene.background = new THREE.Color( 0xffffff );

	var dirLight = new THREE.DirectionalLight( 0x5a1e7c, 0.125 );
				dirLight.position.set( 0, 0, 1 ).normalize();
				this.scene.add( dirLight );

				var pointLight = new THREE.PointLight( 0xb13cf3, 1.5 );
				pointLight.position.set( 100, 0, 100 );
				this.scene.add( pointLight );

    
    
	 let geometry = new THREE.TextGeometry( 'A', {
		font: this.font,
		size: 50,
		height: 5,
		curveSegments: 12,
		// bevelEnabled: true,
		// bevelThickness: 10,
		// bevelSize: 8,
		// bevelOffset: 0,
		// bevelSegments: 5
	} );


  geometry.center();
geometry.computeBoundingBox();
  var centerOffset = - 0.5 * ( geometry.boundingBox.max.x - geometry.boundingBox.min.x );
  console.log(centerOffset)
	let material = new THREE.MeshPhongMaterial( { color: 0xeeeeee,specular: 0x333333 } ); // front

    this.mesh = new THREE.Mesh( geometry, material );
     
    this.scene.add( this.mesh );

  

    

	this.renderer = new THREE.WebGLRenderer( { antialias: true } );
	this.renderer.setSize( container.clientWidth, container.clientHeight );
    var controls = new OrbitControls( this.camera, this.renderer.domElement );
			
   
	  container.appendChild(this.renderer.domElement);

}
,
animate: function() {

	requestAnimationFrame( this.animate );

	
   this.camera.lookAt( this.cameraTarget );
    
  
    this.mesh.rotation.y += 0.03;
     
  
	this.renderer.render( this.scene, this.camera );

}
 
       
 },
 mounted() {
     var self=this;
     this.loadFont();
     setTimeout(function(){ 
      self.init();
      self.animate();

      }, 100);
      
  } }
</script>


<style scoped>
#container{
    margin: auto;
    margin-top: 6rem; 
    align-content: center;
    width:400px;
    height:400px;
}


</style>
