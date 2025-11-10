import { Component, OnInit, signal } from '@angular/core';
import { PhotoEssai } from './photo-essai/photo-essai';
import { Photo } from './models/photo';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [
    PhotoEssai
  ],
  templateUrl: './app.html',
  styleUrl: './app.scss'
})
export class App  implements OnInit{
  myPhoto !: Photo;
  myOtherphoto!: Photo;
  myLastphoto!: Photo;
  ngOnInit(): void {
      this.myPhoto = new Photo(
        "voiture",
        "https://i.pinimg.com/736x/05/f2/21/05f22141d1d20e415bb2e61f679b2e14.jpg",
        "range-rover dernier nouvelle",
        new Date,
        0
      );
      this.myOtherphoto = new Photo(
        "paris",
        "https://i.pinimg.com/736x/71/2b/74/712b745d11b109f2ef40ccc89be31b10.jpg",
        "summer into Paris",
        new Date,
        0
      );
      this.myLastphoto = new Photo(
        "villa",
        "https://i.pinimg.com/1200x/33/d2/d9/33d2d90eef8ba9b3c7b4f78fa0430fad.jpg",
        "villa de mais rêve ohlala🫠🥹😍",
        new Date,
        0
      )


  }
   
}
