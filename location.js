class location {
    constructor(id,name, isReserved){
        this.id = id;
        this.name = name;
        this.isReserved = isReserved
    }
    getName() {
    return this.name;
  }

  isReserved() {
    return this.isReserved;
  }

  getId() {
    return this.id;
  }
}