export class Gigasecond {
  constructor(private moment: Date) {}

  public date(): Date {
    const time_since_epoch = this.moment.getTime()
    // return new Date(time_since_epoch + 1_000_000_000 * 1000)
    return new Date(time_since_epoch + 1e9 * 1000)
  }
}
