import { Component, Input, input, OnInit } from '@angular/core';
import { Photo } from '../models/photo';
import { DatePipe } from '@angular/common';

@Component({
  standalone: true,
  selector: 'app-photo-essai',
  imports: [DatePipe],
  templateUrl: './photo-essai.html',
  styleUrl: './photo-essai.scss'
})
export class PhotoEssai implements OnInit{
 
  isliked!: boolean;
  textbutton!: string;

  @Input() photo!:Photo;

  ngOnInit(): void {
      
      this.isliked =false;
      this.textbutton = 'like 👍';
      
}
onlike():void{
  if(this.isliked){
    this.photo.like--;
    this.textbutton = 'like 👎';
    this.isliked = false;
  }else{
    this.photo.like++
    this.textbutton = 'Unlike 👍';
    this.isliked = true;
  }
  
}
}
