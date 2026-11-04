export class ValueError extends Error {
  constructor() {
    super('Bank account error')
  }
}

export class BankAccount {
  constructor(private isOpened: boolean = false, private bal: number = 0) {
  }

  open(): void {
    if(this.isOpened) {
      throw new ValueError()
    }
    this.isOpened = true
    this.bal = 0
  }

  close(): void {
    if(!this.isOpened) {
      throw new ValueError()
    }
    this.isOpened = false
  }

  deposit(_argument: number): void {
    if (!this.isOpened) {
      throw new ValueError()
    } else if (_argument <= 0) {
      throw new ValueError()
    } else {
      this.bal += _argument
    }
  }

  withdraw(_argument: number): void {
    if (!this.isOpened) {
      throw new ValueError()
    } else if (this.bal - _argument < 0) {
      throw new ValueError()
    } else if (_argument <= 0) {
      throw new ValueError()
    } else {
      this.bal -= _argument
    }
  }

  get balance(): number {
    if (this.isOpened) {
      return this.bal
    } else {
      throw new ValueError()
    }
  }
}
