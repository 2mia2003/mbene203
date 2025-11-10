
export class Photo{
    constructor(
        public title:string,
        public img:string,
        public description:string,
        public createAt:Date,
        public like:number,
    ){}
}