export interface AllotmentView{
    id: number,
    category: string,
    brand: string,
    thumbnail: string,
    name: string,
    slug: string,
    status: string,
    totalValue: number,
    minimumBid: number,
    startDate: Date,
    endDate: Date,
    city: string,
    uf: string,
    bids:number,
    view: number,

    principalName: string,
    principalTitle: string,
    principalDescription: string,
    principalCategory: string,
    principalStartDate: Date,
    principalEndDate: Date

}